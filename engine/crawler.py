
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







# starter = ['handphone','komputer','laptop','asus zenfone','xiaomi','macbook pro','macbook late','laptop asus','laptop acer','laptop zyrex','oppo','machine learning','samsung','lcd monitor','hp oppo','hp xiaomi','xiaomi redmi','cpu murah','aksesoris pc','ram ddr2','ram ddr3','printer','ram','hp oppo a3s','charger','flashdisk','resep masakan','buku tulis','tas','sepatu','jaket','kaos','celana','buku','kabel','sandal','jam tangan pria','jam tangan wanita','topi','hp smartfren','hp nokia','iphone 5','iphone 5s','iphone 6','iphone 6s','iphone xs','iphone x','ipad pro']
starter = ['asus zenbook','asus rog','samsung laptop','acer predator','acer core i3','acer core i7','asus core i3','lenovo ideapad','lenovo','lenovo core i7','amd ryzen','vga','gtx 1080','nvidia gforce','ram vgen','flashdrive kingstone','celana jeans','levis','jaket bomber','jaket kulit','jaket jeans','kacamata','make up','wardah kosmetik','shampoo','motor','mobil','sepatu roda','mesin','processor','arduino','raspberry pi']


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