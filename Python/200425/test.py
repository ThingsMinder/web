from collections import Counter 

#c = Counter("Hello World!")
#c = Counter("0000")
#c = Counter(l=3,o=2,h=1,w=1,r=1,d=1)
#print(c)

def removeDuplicates(arr):
    c = Counter(arr)
    for i in arr:
        if c[i] <= 2:
            continue
        else:
            arr.remove[i]          
    
    return print(arr)
            


removeDuplicates([1,1,1,2,2,3])
removeDuplicates([1,2,2,3,5,2,4,5,3,2,1,5])
removeDuplicates([3,2,2,1])
removeDuplicates([3,2,2,12,12,12])