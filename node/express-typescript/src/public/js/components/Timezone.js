import { h } from 'preact';

export default () => {
	let tz = tzAbbr();
	return (
		<span>{ tz }</span>
	);
}

var tzAbbr = function (dateInput) {
	var dateObject = dateInput || new Date(),
		dateString = dateObject + "",
		tzAbbr = (
			// Works for the majority of modern browsers
			dateString.match(/\(([^\)]+)\)$/) ||
			// IE outputs date strings in a different format:
			dateString.match(/([A-Z]+) [\d]{4}$/)
		);

	if (tzAbbr) {
		// Old Firefox uses the long timezone name (e.g., "Central
		// Daylight Time" instead of "CDT")
		tzAbbr = tzAbbr[1].match(/[A-Z]/g).join("");
	}

	// Uncomment these lines to return a GMT offset for browsers
	// that don't include the user's zone abbreviation (e.g.,
	// "GMT-0500".) I prefer to have `null` in this case, but
	// you may not!
	// First seen on: http://stackoverflow.com/a/12496442
	// if (!tzAbbr && /(GMT\W*\d{4})/.test(dateString)) {
	// 	return RegExp.$1;
	// }

	return tzAbbr;
};
