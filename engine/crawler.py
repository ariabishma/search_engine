
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

from Core import crawl 

starter = ['handphone','komputer','laptop']


index  = crawl.Crawler(starter,'bukalapak')
cr 	   = index.crawling()

result = json.dumps(cr.result())




# ------------------------------
# (Just For Learning Purpose)
# 	  !!!Just For Fun!!!
# ------------------------------