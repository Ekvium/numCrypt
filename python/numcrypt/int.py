def convert(num, reverse = False, digits = 8):
	key = list('b*2m*tSB081y|e~4paxxMgl#TAAApE@F')
	keylen = len(key)
	num = list(str(num).rjust(digits, '0'))
	iterations = 3 # don't use 1
	reverse = -1 if reverse else 1
	for i in range(0, iterations):
		for d in range(0, digits):
			num[d] = str((int(num[d]) + 300 + ord(key[(i+d)%keylen]) + int(num[(d+digits-1)%digits]) * reverse) % 10)
	return int(''.join(num))
