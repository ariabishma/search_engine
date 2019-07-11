import requests as req
from bs4 import BeautifulSoup as bs

class Crawler(object):
	"""docstring for Crawler"""
	def __init__(self,url):
		self.url = url
		self.soup = ''
		self.web = ''

	def crawling(self):
		self.web = req.get(self.url)
		self.soup = bs(self.web.content,"html.parser")
		return self.soup


		