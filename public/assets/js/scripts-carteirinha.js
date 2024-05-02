const userName= localStorage.getItem('usuario');
const userTurma = localStorage.getItem('turma');
const userRa = localStorage.getItem('ra');

function exportCertificateToPNG() {
    const certificateDiv = document.getElementById('card'); // Substitua 'certificate' pelo ID da sua div de certificado
    html2canvas(certificateDiv).then(canvas => {
      const imgData = canvas.toDataURL('image/png');
      const link = document.createElement('a');
      link.href = imgData;
      link.download = `careteirinha.png`; // Nome do arquivo de saída
      link.click();
    });
  }


