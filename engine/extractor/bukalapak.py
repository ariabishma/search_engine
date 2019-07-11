

import mysql.connector




class Bukalapak(object):
	"""docstring for ClassName"""
	def __init__(self, arg):
		self.keyword = arg
		self.baseUrl = "https://www.bukalapak.com/products?&search[keywords]="+arg
		self.result = {
			self.baseUrl : []
		}

	def Extract(self,soup):
		product_name = soup.find_all('a',class_="product__name") 
		product_price = soup.find_all('div',class_="product-price") 
		product_media = soup.find_all('img',class_="product-media__img") 
		mydb = mysql.connector.connect(
		host="localhost",
		user="root",
		passwd="",
		database="soft_tech"
		)

		mycursor = mydb.cursor()

		for idx, i in enumerate(product_name):

			res = {
				'title' : i.get('title'),
				'price' : product_price[idx].get('data-reduced-price'),
				'media' : product_media[idx].get('data-src'),
				'original_url' : "https://bukalapak.com"+i.get('href')
			}

			print(res["title"])

			sql = "INSERT INTO barang (judul,harga,media,vendor,keyword) VALUES (%s, %s, %s, %s, %s)"
			val = (res["title"],res["price"],res["media"],"bukalapak",self.keyword)



			mycursor.execute(sql, val)

			
			self.result[self.baseUrl].append(res)
		mydb.commit()
		
		return self.result


