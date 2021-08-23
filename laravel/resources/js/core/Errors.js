class Errors {
    constructor() {
        this.errors = {}
    }

    /**
     * Determine if an error exists for a given field
     * @param {string} field
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    /**
     * clear one or all error fields
     * @param {string|null} field
     */
    remove(field) {
        if (field) {
            delete this.errors[field]

            return
        }

        this.errors = {}
    }

    /**
     * Check if a field has error
     *
     *  @param {string} field
     */
    has(field) {
        return this.errors.hasOwnProperty(field)

    }

    /**
     * Determine if we have any error
     * @returns {boolean}
     */
    any() {
        return Object.keys(this.errors).length > 0
    }

    /**
     * Record new errors
     * @param {object} errors
     */
    record(errors) {
        this.errors = errors
    }
}

export default Errors
