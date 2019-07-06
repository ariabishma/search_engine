import requests as req
from bs4 import BeautifulSoup as bs

class Crawler():
	"""docstring for Crawler"""
	def __init__(self,data,web):
		self.datas = data
		self.quees = web
		self.finish = [] # items



	# daemon workers
	def crawling(self):

		# for quee in self.quees:
		# 	if quee not in self.finish:
		web = req.get('https://www.bukalapak.com/products?&search[keywords]=handphone')
		soup = bs(web.content,'html.parser')
		product_name = soup.find_all('a',class_="product__name") 
		product_price = soup.find_all('div',class_="product-price") 
		print(product_name[0].get('title'))
		print(product_price[0].get('data-reduced-price'))

		return self
	




	
	# universal workers

	def result(self):
		return self.quees

		