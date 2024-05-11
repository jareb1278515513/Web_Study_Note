import requests
from bs4 import BeautifulSoup

def crawl_tieba():
    base_url = "https://tieba.baidu.com"
    tieba_url = "https://tieba.baidu.com/f?kw=%E7%BB%BC%E5%90%88%E6%A0%87%E9%A2%98&ie=utf-8&pn=0"
    
    # 使用requests模块的get函数来获取网页内容
    response = requests.get(tieba_url)
    
    # 检查响应状态码
    if response.status_code == 200:
        # 使用BeautifulSoup解析HTML
        soup = BeautifulSoup(response.text, 'html.parser')
        # 选择帖子链接元素
        post_links = soup.select(".j_thread_list .threadlist_title a")
        
        # 遍历帖子链接并打印标题和链接
        for index, link in enumerate(post_links[:10], 1):
            post_url = base_url + link['href']
            post_title = link.get_text().strip()
            print(f"帖子{index}: {post_title}")
            print(f"链接: {post_url}")
            print()
    else:
        print("无法连接到贴吧")

if __name__ == "__main__":
    crawl_tieba()
