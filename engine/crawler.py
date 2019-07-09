
# ---------------------------
# SoftTech Indexing Engine
# WHY SOFTTECH ? 
# \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
# Search OVer the inTernet TECHnology
# |		  |			|		|
# V 	  V         V       V
# S------OV---------T------TECH------
#
# a simple engine for crawling data over the internet
# made by boring programmers for boring user
#
# @Author m.aria bishma fauzan
# 		  Ravialdo
#
# Under MIT License


import os
import json


# from Core import crawl
from extractor import bukalapak as bl 

import requests as req
from bs4 import BeautifulSoup as bs

from datetime import datetime


starter = ['handphone','komputer','laptop']

blapak = bl.Bukalapak(starter[0])
url = blapak.baseUrl

print("Please Wait... Crawling In Process... ") 
web = req.get(url)
soup = bs(web.content,"html.parser")

product_name = soup.find_all('a',class_="product__name") 
product_price = soup.find_all('div',class_="product-price") 
product_media = soup.find_all('img',class_="product-media__img") 


result = {
	url : []
}
for idx, i in enumerate(product_name):
	
	 res = {
	 	'title' : i.get('title'),
	 	'price' : product_price[idx].get('data-reduced-price'),
	 	'media' : product_media[idx].get('data-src'),
	 	'original_url' : "https://bukalapak.com"+i.get('href')
	 }
	
	 result[url].append(res)

date = datetime.now()

with open('result/BL-'+str(date)+'.json','w+') as json_file:
	json.dump(result,json_file)

print('Product Success Added to your database')





# index  = crawl.Crawler(starter,'bukalapak')
# cr 	   = index.crawling()

# result = json.dumps(cr.result())




# ------------------------------
# (Just For Learning Purpose)
# 	  !!!Just For Fun!!!
# ------------------------------