import requests

response = requests.get("https://www.baidu.com")
print(response.text[:100])
