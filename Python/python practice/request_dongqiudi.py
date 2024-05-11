import requests

def get_top_20_posts():
    url = "https://api.dongqiudi.com/app/tabs/android/1.json"
    response = requests.get(url)
    
    if response.status_code == 200:
        data = response.json()
        post_items = data['articles'][:20]
        
        top_20_posts = []
        for item in post_items:
            title = item['title']
            link = f"https://www.dongqiudi.com/news/{item['id']}.html"
            top_20_posts.append((title, link))
        
        return top_20_posts
    else:
        print("Failed to retrieve Dongqiudi posts.")
        return None

if __name__ == "__main__":
    top_20_posts = get_top_20_posts()
    if top_20_posts:
        print("懂球帝前20个帖子链接：")
        for idx, (title, link) in enumerate(top_20_posts, start=1):
            print(f"{idx}. {title}: {link}")
    else:
        print("无法获取懂球帝前20个帖子链接。")
