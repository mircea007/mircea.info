def finput(file):
    f = open(file, "r")
    txt = f.read()
    txt += ' '
    f.close()
    Jnt = False
    n = ''
    lst = []
    for c in txt:
        if ord(c) >= ord('0'):
            if ord(c) <= ord('9'):
                Int = True
                n += c
            else:
                Int = False
        else:
            Int = False
        if Jnt == True:
            if Int == False:
                lst.append(int(n))
                n = ''
        Jnt = Int
    return lst