const data = require("./fakerData.json");

const getCounts = () => {
  return {
    students: data.students.length,
    instructors: data.instructors.length,
    courses: data.courses.length,
    groupes: data.groupes.length,
    seances: data.seances.length,
  };
};

const findGroupe = (id_groupe) => {
  return data.groupes.find((groupe) => {
    return groupe.id === id_groupe;
  });
};

const findGroupeStudents = (id_groupe) => {
  return findGroupe(id_groupe).students.map((student_id) =>
    data.students.find((student) => student.id == student_id)
  );
};

const createStudents = () => {
  return;
};

// ! TODO
// ? FUNCTION CREATE NEW Students
// ! Function on parametre course and return the enseignant,student,course

module.exports = { getCounts, findGroupe, findGroupeStudents };
