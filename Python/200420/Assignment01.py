import requests
import re
import numpy as np 

r = requests.get('http://map.amap.com/service/subway?_1469083453978&srhdata=1100_drw_beijing.json')
#print(r.text)

'''
prog = re.compile("\"n\":\"w+\"")
print(prog.findall(r.text))
'''

'''
def get_lines_stations_info(text):
    
    m = re.search(patt,text)
    return list(m)

print(get_lines_stations_info(r))
'''

def get_lines_stations_info(text):
    #遍历text格式数据，组成地点数据结构
    #所有线路信息的dictionary：Key:线路名称；value：站点名称list
    lines_info = {}

    #所有站点信息的dict:key:站点名称；value：站点坐标（x,y）
    station_info = {}

    pattern = re.compile('"st".*?"kn"')
    lines_list = pattern.findall(text)

    for i in range(len(lines_list)):
        #地铁线路名
        pattern = re.compile('"ln":".*?"')
        line_name = pattern.findall(lines_list[i])

        #站点信息list
        pattern = re.compile('"rs".*?"sp"')
        temp_list = pattern.findall(lines_list[i][0][6:-1])
        
