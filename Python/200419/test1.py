import re
import networkx as nx
import matplotlib.pyplot as plt
import matplotlib as mpl 
import numpy as np 


'''
def fac(n):
    if n == 1:
        return 1
    else:
        return n * fac(n-1)

print(fac(10))
print("\'" + str(fac(10)) + "\'")
print(len(str(fac(10))))
'''

'''
def sum_to_fac(n):
    fac_n = fac(n)
    result = 0
    for i in range(1,fac_n):
        result += i
    return result
'''


#print(len(str(sum_to_fac(10))))

'''
a_simple_case = "this is a test case"
b_simple_case = 'this is a tessssssst case'
c_simple_case = 'this is a tet case'

pat = re.compile('tes*t')

print(pat.findall(a_simple_case))
print(pat.findall(b_simple_case))
print(pat.findall(c_simple_case))
'''


social_network = {
    '小张':['小刘','小王','小红'],
    '小王':['六六','娇娇','小曲'],
    '娇娇':['宝宝','花花','喵喵'],
    '六六':['小罗','奥巴马','克林顿']
}

social_graph = nx.Graph(social_network)
nx.draw(social_graph,with_labels=True)


