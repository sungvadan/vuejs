import Errors from "./Errors";

class Form {
    constructor(data) {
        this.origineData = data
        this.errors = new Errors()

        for (let field in data) {
            this[field] = data[field]
        }
    }

    data () {
        let data = Object.assign({}, this)
        delete data.origineData
        delete data.errors

        return data
    }

    /**
     * Submit the form
     *
     * @param {string} method
     * @param {string} url
     */
    submit(method, url) {
        return new Promise((resolve, reject) => {
            axios[method](url, this.data())
                .then(response => {
                    this.onSuccess(response.data)
                    resolve(response.data)
                })
                .catch(error => {
                    this.onError(error.response.data.errors)
                    reject(error.response.data)
                })
        })

    }

    /**
     * Reset the form
     */
    reset() {
        for (let field in this.origineData) {
            this[field] = ''
        }

        this.errors.remove()
    }

    onSuccess(data) {
        if (data.hasOwnProperty('message'))  {
            alert(data.message)
        } else {
            alert('ok')
        }
        this.reset()
    }

    /**
     * Handle a fail form submission
     *
     * @param {object} error
     */
    onError(errors){
        this.errors.record(errors)
    }
}

export default Form
