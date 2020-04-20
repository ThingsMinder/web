import requests
import re
import numpy as np 

r = requests.get('http://map.amap.com/service/subway?_1469083453978&srhdata=1100_drw_beijing.json')
#print(r.text)

prog = re.compile("\"n\":\"w+\"")
print(prog.search(r.text))

'''
def get_lines_stations_info(text):
    
    m = re.search(patt,text)
    return list(m)




print(get_lines_stations_info(r))
'''