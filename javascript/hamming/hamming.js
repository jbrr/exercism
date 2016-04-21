var Hamming = function() {

  Hamming.prototype.compute = function(strandA, strandB) {
    strandA = strandA.split('');
    strandB = strandB.split('');
    if (strandA.length != strandB.length) {
      throw Error('DNA strands must be of equal length.')
    }
    var counter = 0;
    for (var i = 0; i < strandA.length; i++) {
      if (strandA[i] != strandB[i]) {
        counter ++
      }
    }
    return counter;
  }
}

module.exports = Hamming;
