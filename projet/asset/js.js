function printContent() {
    var content = document.getElementById('contentToPrint').innerHTML;
    var newWindow = window.open('', '_blank');
    newWindow.document.write('<html><head><title>Contenu à Imprimer</title></head><body>' + content + '</body></html>');
    newWindow.print();
}
document.getElementById('printButton').addEventListener('click', function() {
    printContent();
});