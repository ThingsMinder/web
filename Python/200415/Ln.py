import numpy as np 

'''
dir(np)
'''

ls_1 = list(range(4))

arr_1 = np.array(ls_1)
print(arr_1)

print(arr_1.ndim)
print(arr_1.shape)

print(arr_1.dtype)

arr_0s = np.zeros((2,3))
arr_1s = np.ones((2,3))

print(arr_0s)
print(arr_0s.dtype)
print(arr_1s)
print(arr_1s.dtype)

print(np.diag((2,3,5,4)))

arr_1.reshape((2,2))

arr_5 = np.array(range(9))
print(arr_5)
reshape_arr_5 = arr_5.reshape((-1,3))
print(reshape_arr_5)
ravel_arr = reshape_arr_5.ravel()
print(ravel_arr)

arr = np.array(ls_1)
