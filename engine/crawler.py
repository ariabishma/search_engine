
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


from Core import crawl as cr
from extractor import bukalapak as bl 

import requests as req
from bs4 import BeautifulSoup as bs

from datetime import datetime


starter = ['handphone','komputer','laptop','asus zenfone','xiaomi','macbook pro','macbook late','laptop asus','laptop acer','laptop zyrex','oppo','machine learning','samsung']


for idx,c in enumerate(starter):
	# bukalapak
	print("Please Wait... Crawling In Process... ") 
	blapak = bl.Bukalapak(c)
	url = blapak.baseUrl

	crw = cr.Crawler(url)
	soup = crw.crawling()

	res = blapak.Extract(soup)

	date = datetime.now()

	with open('result/BL-'+c+'-'+str(date)+'.json','w+') as json_file:
		json.dump(res,json_file)
		
	print('Product Success Added to your database')

print(idx*50+' Product Has been crawling')




# index  = crawl.Crawler(starter,'bukalapak')
# cr 	   = index.crawling()

# result = json.dumps(cr.result())




# ------------------------------
# (Just For Learning Purpose)
# 	  !!!Just For Fun!!!
# ------------------------------