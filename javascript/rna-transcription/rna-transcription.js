var DnaTranscriber = function() {

  var rna = {
    'G': 'C',
    'C': 'G',
    'T': 'A',
    'A': 'U'
  }

  DnaTranscriber.prototype.toRna = function(dna) {
    dna = dna.split('');
    output = [];
    for (var i = 0; i < dna.length; i++) {
      output.push(rna[dna[i]])
    }
    return output.join('');
  }
}

module.exports = DnaTranscriber;
