const fs = require("fs");

const capitalize = s => {
  if (typeof s !== "string") return "";
  return s.charAt(0).toUpperCase() + s.slice(1);
};

function createFile(path, content, className) {
  try {
    const data = fs.writeFileSync(
      `${path}/${capitalize(className)}.php`,
      content
    );
    //file written successfully
  } catch (err) {
    console.error(`Err: ${err}`);
  }
}

module.exports = {
  createFile: createFile,
  capitalize: capitalize
};
