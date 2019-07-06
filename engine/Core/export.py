import json
import os 
from datetime import datetime

_path = os.path.dirname(__file__)

class Export():
	def __init__(self):
		print('class has been initialized')
		self.data = "bishma"

	def export_json(self,name):
		print('bishma',self.data)
		data1 = {}
		data1['nama'] = 'm.aria bishma fauzan'
		data1['kelas'] = "12 RPL 1"
		# today = datetime.now()
		# # dd/mm/YY
		# d1 = today.strftime("%d/%m/%Y/%S")
		# print("d1 =", d1)
		# print(path)
		with open(_path+'/../result/'+name+'.json','w+') as json_file:
			json.dump(data1,json_file)
			# print(json_file)