import matplotlib
import requests


'''
#print(matplotlib.__path__)

r = requests.get('https://www.baidu.com')

print('文本编码：（服务器使用的文本编码）',r.encoding)
print('响应状态码：（200表示成功）',r.status_code)
print('字符串方式的响应体：（服务器响应的内容）',r.text)
'''

import re
#help(re.match)
m = re.match('foo','foo string')
print(m)
print(m.group())
print('---------------')

m = re.match('fee','foo string')
print(m)