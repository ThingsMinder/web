'''
var1 = "Hello World!"
print('var1[0]:',var1[0])
print('var1[:5]:',var1[:5])
print('len(var1):',len(var1))

def printme(str):
    print(str)
    return

printme(var1)
'''


'''
def DNA_strand(dna):
    dna_new = ''
    for i in range(len(dna)):
        if dna[i] == 'A':
           dna_new += 'T' 
        elif dna[i] == 'T':
            dna_new += 'A'
        elif dna[i] == 'C': 
            dna_new += 'G' 
        elif dna[i] == 'G':
            dna_new += 'C'
        else:
            print('input incorrect!')
    
    return dna_new

print(DNA_strand('ATTGC'))
print(DNA_strand('AAAA'))
print(DNA_strand('CGAA'))
DNA_strand('dewdw')
'''

def DNA_strand(dna):
    dna_dict = {'A':'T','T':'A','C':'G','G':'C'}
    dna_new = ''
    for i in dna:
        dna_new += dna_dict[i]
    return dna_new

print(DNA_strand('ATTTT'))


