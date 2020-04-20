
'''
score = {}
score['name'] = 'zhangfei'
print(score)

score['attack'] = 95
score['age'] = 28

print(score)
'''


def duplicate_count(text):
    s = set(list(text.lower()))
    count = len(text.lower()) - len(s)
    return count

print(duplicate_count('dwedwdwdewfwe'))
    



