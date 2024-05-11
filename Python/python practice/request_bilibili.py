import requests
from bs4 import BeautifulSoup
import time

def get_top_20_links():
    headers = {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36"
    }
    url = "https://www.bilibili.com/ranking/all/0/0/1"
    response = requests.get(url, headers=headers)
    
    if response.status_code == 200:
        soup = BeautifulSoup(response.text, 'html.parser')
        video_items = soup.find_all('li', class_='rank-item')
        
        top_20_links = []
        for item in video_items[:20]:
            title = item.find('a', class_='title').text.strip()
            link = item.find('a', class_='title')['href']
            top_20_links.append((title, link))
        
        return top_20_links
    else:
        print("Failed to retrieve Bilibili ranking page.")
        return None

if __name__ == "__main__":
    top_20_links = get_top_20_links()
    if top_20_links:
        print("播放量前20的视频链接：")
        for idx, (title, link) in enumerate(top_20_links, start=1):
            print(f"{idx}. {title}: https:{link}")
    else:
        print("无法获取播放量前20的视频链接。")

'''
在某些情况下，网站可能会阻止爬虫程序的访问。
可以尝试添加一些请求头来模拟浏览器的访问，这有助于减少被网站识别为爬虫的可能性。
然而这个程序截至目前还是没能成功实现功能
可能是因为 Bilibili 的网站结构或防爬虫机制已经发生了变化，需要进一步调整代码。
'''