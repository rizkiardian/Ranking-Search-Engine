#!/usr/bin/python3

import re
import sys
import json
import pickle

#Argumen check
if len(sys.argv) != 4 :
	print ("\n\nPenggunaan\n\tquery.py [gamalmen.json] [n] [query]..\n")
	sys.exit(1)

query = sys.argv[3].split(" ")
n = int(sys.argv[2])

with open(sys.argv[1], 'r') as gamalmen:
	indexFile = json.load(gamalmen)

#query
list_doc = {}
for q in query:
	try :
		for doc in indexFile:
			if q.lower() in doc['judul'].lower():
				if doc['link-href'] in list_doc:
					list_doc[doc['link-href']]['score'] += 1
				else :
					list_doc[doc['link-href']] = {
						'judul': doc['judul'],
						'link-href': doc['link-href'],
						'harga': doc['harga'],
						'gambar': doc['gambar-src'],
						'score': 1
					}
	except :
		continue


#convert to list
list_data=[]
for data in list_doc.values() :
	list_data.append(data)


#sorting list descending
count=1
for data in sorted(list_data, key=lambda k: k['score'], reverse=True):
    result = {
		'judul' : data['judul'],
		'link-href' : data['link-href'],
		'harga' : data['harga'],
		'gambar' : data['gambar']
	}
    y = json.dumps(result)
    print(y)
    if (count == n) :
        break
    count+=1
