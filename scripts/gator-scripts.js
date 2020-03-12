$('#phone').keyup(function()
{
    this.value = this.value.replace(/(\d{3})\-?(\d{3})\-?(\d{4})/g, '$1-$2-$3');
});
$('#zip').keyup(function () {
    this.value = this.value.replace(/(^\d{5}$)|(^\d{5}-\d{4}$)/g);
})