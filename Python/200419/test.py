import matplotlib
#print(matplotlib.__path__)

import numpy as np 
import matplotlib.pyplot as plt 
import networkx as nx 

social_network = {
    '小张':['小刘','小王','小红'],
    '小王':['六六','娇娇','小曲'],
    '娇娇':['宝宝','花花','喵喵'],
    '六六':['小罗','奥巴马','克林顿']
}

#plt.rcParams['font.sans-serif'] = ['SimHei']
plt.rcParams['axes.unicode_minus'] = False

social_graph = nx.Graph(social_network)

nx.draw(social_graph,with_labels=True)