
var app1 =  new Vue({
    el: '#search',

    data () {
        return {
            live: '',
            taxstring: '',
            taxArray: ['1029348'],
            ticker: 0
        }
    },

    delimiters: ['<%','%>'],

    methods: {

        searchMe: function (query) {

        },
        match: function (searchable,taxable) {

        // console.log(taxable)

            const found = taxable.some(r=> this.taxArray.includes(r))

            console.log(searchable + ' : '+ found)

            if ((searchable.toLowerCase().includes(this.live.toLowerCase())) && (found == true) ) {
                return true;
            }
        },
        searchme: function () {

            console.log('live: ' + this.live);
        },

        generateList: function (pass,count) {





            if (this.taxstring.toLowerCase().includes(pass.toLowerCase())) {
                this.taxstring = this.taxstring.replace(pass, "");
                 this.taxArray = this.taxArray.filter(e => e !== pass);
                console.log(JSON.stringify(this.taxArray));
                this.ticker -= 1;
                if(this.ticker == 0){
                    this.taxArray = ['1029348'];
                }

            }
            else {
                this.taxstring = this.taxstring + pass;
                this.taxArray.push(pass);
                this.taxArray = this.taxArray.filter(e => e !== '1029348');

                this.ticker += 1;


            }




        },

        stringCompare: function(){



        }






    }


})

