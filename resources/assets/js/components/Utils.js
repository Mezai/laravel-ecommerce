export default class Utils {

	static daysInMonth(month, year) {

		return new Date(year, month, 0).getDate();
	}

	static formatDate() {
		let date = new Date();
		let start = date.getFullYear() - 1 + this.formatMonth(date.getMonth()) + '01';
		let end = date.getFullYear() + this.formatMonth(date.getMonth() - 1) + this.daysInMonth(date.getMonth(), date.getFullYear());
		return [
			start,
			end,
		];
	}

	static getMonth(value) {
		let month = value + 1;
        return month < 10 ? '0' + month : '' + month;
	}

	static getMonthNames() {
		return ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
	}

	static formatMonthName(monthName) {
		let months = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        return months.indexOf(monthName);
	}


	static formatMonth(monthInJs) {
		let month = monthInJs + 1;
		return month < 10 ? '0' + month : '' + month;
	}

	static sortMonths() {

		const monthNames = this.getMonthNames();

		let currentMonth = 3;

		if (currentMonth === 0) {
			var reverse = monthNames.reverse();

			let january = monthNames.splice(11,11);

			let months = january.concat(reverse);

			return months;

		} else {
			let monthsForward = monthNames.splice(currentMonth, monthNames.length);

        	let monthsBackward = monthNames.splice(0, currentMonth);

        	let months = monthsForward.concat(monthsBackward);

        	return months;

		}

	}
}