import numpy as np 
import requests
import re


r = requests.get('http://map.amap.com/service/subway?_1469083453978&srhdata=1100_drw_beijing.json')
print(r.text)


def get_lines_stations_info(text):

    #pass

    #遍历text格式数据，组成地点数据结构
    #所有线路信息的dict：key：线路名称； value：站点名称 List
    lines_info = {}
    for line in text.split("\n"):
        if line.startswith("//"):
            pass
        if line.strip() == "":
            pass
        
        lines = re.findall("name:'(\w+)'",line)[0]
        x_y = re.findall('')



'''
    #所有站点信息的dict：Key：站点名称； value：站点坐标（x，y）
    stations_info = {}

    for i in range(len(lines_list)):
        #可能需要思考的问题：获取「地铁线路名称，站点信息list，站名，坐标（x,y)，数据加入站点的信息dict，将数据加入地铁线路dict」
        pass 


lines_info, stations_info = get_lines_stations_info(r.text)
'''