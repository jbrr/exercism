class Hamming
  def self.compute(strand1, strand2)
    strand1_ary = strand1.split("")
    strand2_ary = strand2.split("")
    if strand1_ary.length != strand2_ary.length
      raise ArgumentError
    end
    counter = 0
    result = strand1_ary.zip(strand2_ary).map { |x, y| x == y }
    result.map do |element|
      if element == false
        counter += 1
      end
    end
    counter
  end
end
