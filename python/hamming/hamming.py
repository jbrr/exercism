def distance(strand_1, strand_2):
    distance = 0
    for i in range(len(strand_1)):
        if strand_1[i] != strand_2[i]:
            distance += 1

    return distance
