export default {
    products: [],
    count: 0,
    total: 0.0,
    add(item) {
        this.load()
        console.log(item)
        this.products.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.products.push(item)
        this.products.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.count++
        this.total += Number(item.price)
        this.save()
    },
    remove(item) {
        this.load()
        const index = this.products.map((el) => {
            return el.id
        }).indexOf(item.id)

        this.products.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.products.splice(index, 1)
        this.count--
        this.total -= Number(item.price)
        this.save()
        this.products.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
    },
    load() {
        localStorage.clear()
        let data = localStorage.getItem('cart')
        if (data !== null) {
            data = JSON.parse(data)
            this.products = data.products
            this.count = data.count
            this.total = data.total
        }
    },
    save() {
        localStorage.setItem('cart', JSON.stringify({
            products: this.products,
            count: this.count,
            total: this.total,
        }))
    }
}