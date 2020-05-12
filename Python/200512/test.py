import requests
import re
import numpy as np 

r = requests.get('http://map.amap.com/service/subway?_1469083453978&srhdata=1100_drw_beijing.json')

# 测试一下
# r = requests.get('http://www.in-et.com')
# print(r.text)

def get_lines_stations_info(text):
    # 遍历text格式数据，组成地点数据结构
    # 所有线路信息的dict：Key：线路名称；value:站点名称list
    lines_info = {}

    #所有站点信息的dict: key:站点名称；value：站点坐标(x,y)
    stations_info = {}

    pattern = re.compile('"st".*?"kn"')
    lines_list = pattern.findall(text)
    for i in range(len(lines_list)):
        #地铁线路名
        pattern = re.compile('"ln":".*?"')
        line_name = pattern.findall(lines_list[i])[0][6:-1]
        #站点信息list
        pattern = re.compile('"rs".*?"sp"')
        temp_list = pattern.findall(lines_list[i])
        station_name_list = []

        for j in range(len(temp_list)):
            #站名
            pattern = re.compile('"n":".*?"')
            station_name = pattern.findall(temp_list[j])[0][5:-1]
            station_name_list.append(station_name)

            #坐标(x,y)
            pattern = re.compile('"sl":".*?"')
            position = tuple(map(float,pattern.findall(temp_list[j])[0][6:-1].split(',')))

            #数据加入站点信息dict
            stations_info[station_name] = position

        #数据加入地铁线路dict
        lines_info[line_name] = station_name_list
    return lines_info,stations_info

lines_info,stations_info = get_lines_stations_info(r.text)

# print(stations_info)
# print(lines_info)
# print(len(lines_info))

def get_neighbor_info(lines_info):
    #把str2加入str1站点的邻接表中
    def add_neighbor_dict(info,str1,str2):
        list1 = info.get(str1)
        if not list1:
            list1 = []
        list1.append(str2)
        info[str1] = list1
        return info
    
    #根据线路信息，建立站点邻接表dict
    neighbor_info = {}
    # for line_name,station_list in lines_info.items():
    for station_list in lines_info.items():
        for i in range(len(station_list) - 1):
            sta1 = station_list[i]
            sta2 = station_list[i+1]
            neighbor_info = add_neighbor_dict(neighbor_info,sta1,sta2)
            neighbor_info = add_neighbor_dict(neighbor_info,sta2,sta1)

    return neighbor_info

neighbor_info = get_neighbor_info(lines_info)

# print(neighbor_info)

# 画地铁图
import networkx as nx 
import matplotlib
import matplotlib.pyplot as plt

# 此代码解决不显示汉字的问题
# matplotlib.rcParams['font.sans-serif'] = ['SimHei']

plt.figure(figsize=(20,20))
stations_graph = nx.Graph()
stations_graph.add_nodes_from(list(stations_info.keys()))
nx.draw(stations_graph,stations_info,with_labels=True,node_size=10)

stations_connection_graph = nx.Graph(neighbor_info)
plt.figure(figsize=(30,30))
nx.draw(stations_connection_graph,stations_info,with_labels=True,node_size=10)


