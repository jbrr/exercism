def to_rna(dna):
    rna_map = {
    "G": "C",
    "C": "G",
    "T": "A",
    "A": "U"
    }

    rna = ""
    for nucleotide in dna:
        rna += rna_map[nucleotide]

    return rna
