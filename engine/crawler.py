
# ---------------------------
# SoftTech Indexing Engine
# ---------------------------
#
# a simple indexing engine for grabbing data over the internet
# made by m.aria bishma fauzan
#
# @Author m.aria bishma fauzan
# Under MIT License

import os
import json

from Core import crawl 

starter = ['handphone']


index  = crawl.Crawler(starter,'bukalapak')
cr 	   = index.crawling()

result = json.dumps(cr.result())






# ------------------------------
# Just For Learning Purpose
# ------------------------------