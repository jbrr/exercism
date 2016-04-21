class Complement
  VERSION = 3
  NUCLEOTIDE_MAP = {"G": "C", "C": "G", "T": "A", "A": "U"}

  def self.of_dna(nucleotides)
    nucleotide_ary = nucleotides.split("")
    base_pairs = nucleotide_ary.map do |nucleotide|
      if NUCLEOTIDE_MAP.has_key?(nucleotide.to_sym)
        NUCLEOTIDE_MAP[nucleotide.to_sym]
      else
        raise ArgumentError
      end
    end
    base_pairs.join("")
  end
end
