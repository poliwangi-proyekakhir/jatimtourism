from selenium import webdriver
import requests
import json
wisata=[]

chrome_path = r"C:\xampp\htdocs\chromedriver.exe"
driver = webdriver.Chrome(chrome_path)

driver.get("https://www.tripadvisor.com/Search?q=jawa%20timur&searchSessionId=BE42C81B2EABEE147AED85C64C9E63D71585877764971ssid&searchNearby=false&sid=98B451CA16C49697377527004B6B2E151585877779725&blockRedirect=true")
review1 = driver.find_elements_by_class_name("result-title")
for post in review1:
    print(post.text)
    wisata.append(post.text)


resp = requests.post('http://localhost/jatimscrapping.php', params=wisata)
print("--------------------------")
print(wisata)