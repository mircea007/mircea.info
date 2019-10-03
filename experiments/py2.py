def rand_sort(lst):
    rndlst = []
    for i in range(len(list)):
        n = choice(list)
        rndlst.append(n)
        v = 0
        while(list[v] != n):
            v += 1
        del list[v];
    return rndlst