class Sophee(object):
	"""docstring for ClassName"""
	def __init__(self, arg):
		self.baseUrl = "https://shopee.co.id/search?keyword="+arg
		self.result = {
			self.baseUrl : []
		}

	def Extract(self,soup):
		product_name = soup.find_all('a',class_="product__name") 
		product_price = soup.find_all('div',class_="product-price") 
		product_media = soup.find_all('img',class_="product-media__img") 
		for idx, i in enumerate(product_name):

			res = {
				'title' : i.get('title'),
				'price' : product_price[idx].get('data-reduced-price'),
				'media' : product_media[idx].get('data-src'),
				'original_url' : "https://bukalapak.com"+i.get('href')
			}
			
			self.result[self.baseUrl].append(res)
		return self.result