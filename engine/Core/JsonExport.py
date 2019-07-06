import json
from . import export

def exportJson(data):
	result = json.dumps(data)
	print(result)
	exp = export.Export()
	exp.export_json('testing')
	return 1