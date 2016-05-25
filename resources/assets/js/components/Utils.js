export default class Utils {

	daysInMonth(month, year) {

		return new Date(year, month, 0).getDate();


	}

	formatDate() {
		let date = new Date();
		let start = date.getFullYear() - 1 + this.formatMonth(date.getMonth()) + '01';
		let end = date.getFullYear() + this.formatMonth(date.getMonth() - 1) + this.daysInMonth(date.getMonth(), date.getFullYear());
		return [
			start,
			end,
		];
	}


	formatMonth(monthInJs) {
		let month = monthInJs + 1;
		return month < 10 ? '0' + month : '' + month;
	}

	getMonths() {
		const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        let currentMonth = new Date().getMonth();

        let monthsForward = monthNames.splice(currentMonth, monthNames.length);

        let monthsBackward = monthNames.splice(0, currentMonth);

        let months = monthsForward.concat(monthsBackward);
        
        
        return (currentMonth === 0) ? ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ] :  months;

	}


}