function isValidName(name) {
  // Regular expression pattern to validate the name
  const namePattern = /^[a-zA-Z]+$/;

  // Test the name against the pattern and return the result
  return namePattern.test(name);
}

// Example usage:
const name1 = "JohnDoe";
const name2 = "Jane123";
console.log(isValidName(name1)); // Output: true
console.log(isValidName(name2)); // Output: false
