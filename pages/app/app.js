function showHide(d) {
  let onediv = document.getElementById(d);
  let divs = ["option1", "option2", "option3", "option4"];
  for (let i = 0; i < divs.length; i++) {
    if (onediv != document.getElementById(divs[i])) {
      document.getElementById(divs[i]).style.display = "none";
    }
  }
  onediv.style.display = "flex";
}

let loadJsonFromPHP = function (json) {
  let members = json;

  // EXTRACT VALUE FOR HTML HEADER.
  // ('Book ID', 'Book Name', 'Category' and 'Price')
  // var col = [];

  // for (var i = 0; i < members.length; i++) {
  //   for (var key in members[i]) {
  //     if (col.indexOf(key) === -1) {
  //       col.push(key);
  //     }
  //   }
  // }

  let col = [
    "firstName",
    "lastName",
    "gender",
    "nic",
    "phone",
    "package",
    "status",
  ];

  // CREATE DYNAMIC TABLE.
  let table = document.createElement("table");

  // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

  let tr = table.insertRow(-1); // TABLE ROW.

  for (let i = 0; i < col.length; i++) {
    let th = document.createElement("th"); // TABLE HEADER.
    th.innerHTML = col[i];
    tr.appendChild(th);
  }

  // ADD JSON DATA TO THE TABLE AS ROWS.
  // for (var i = 0; i < members.length; i++) {
  //   tr = table.insertRow(-1);

  //   for (var j = 0; j < col.length; j++) {
  //     var tabCell = tr.insertCell(-1);
  //     tabCell.innerHTML = members[i].[col[j]];
  //   }
  // }

  for (let i = 0; i < members.length; i++) {
    tr = table.insertRow(-1);

    let tabCell = tr.insertCell(-1);
    tabCell.innerHTML = members[i].firstName;
    let tabCell1 = tr.insertCell(-1);
    tabCell1.innerHTML = members[i].lastName;
    let tabCell2 = tr.insertCell(-1);
    tabCell2.innerHTML = members[i].gender;
    let tabCell3 = tr.insertCell(-1);
    tabCell3.innerHTML = members[i].nic;
    let tabCell4 = tr.insertCell(-1);
    tabCell4.innerHTML = members[i].phone;
    let tabCell5 = tr.insertCell(-1);
    tabCell5.innerHTML = members[i].package;
    let tabCell6 = tr.insertCell(-1);
    tabCell6.innerHTML = members[i].status;
  }

  // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
  let divContainer = document.querySelector(".userTable_container");
  divContainer.innerHTML = "";
  divContainer.appendChild(table);
};

function searchMember(json) {
  let searchButton = document.querySelector(".search_user");

  let members = json;
  // console.log(json);
  searchButton.addEventListener("click", function () {
    let searchInput = document.querySelector("#nic").value;
    let searchIndex;

    if (searchInput != "" || searchInput == null) {
      for (let i = 0; i < members.length; i++) {
        if (searchInput == members[i].nic) {
          searchIndex = i;
        }
      }

      if (searchIndex >= 0) {
        let i = searchIndex;
        document.querySelector("#firstName").value = members[i].firstName;
        document.querySelector("#lastName").value = members[i].lastName;
        document.querySelector("#doj").value = members[i].dateOfJoin;
        document.querySelector("#package").value = members[i].package;
        document.querySelector("#addressline1").value = members[i].addressLine1;
        document.querySelector("#addressline2").value = members[i].addressLine2;
        document.querySelector(".category").value = members[i].category;
        document.querySelector("#nextPayment").value = members[i].nextPayment;
        document.querySelector("#status").value = members[i].status;
        document.querySelector(".gender").value = members[i].gender;
        document.querySelector("#dob").value = members[i].dateOfBirth;
        document.querySelector("#phone").value = members[i].phone;
        document.querySelector("#email").value = members[i].email;
        document.querySelector("#password").value = members[i].password;
        document.querySelector("#emergencyContactPerson").value =
          members[i].emergencyContactPerson;
        document.querySelector("#emergencyContactNo").value =
          members[i].emergencyContactNo;
        document.querySelector("#paymentStatus").value =
          members[i].paymentStatus;
      } else {
        alert("NIC does not exist");
      }
    } else {
      alert("Enter NIC");
    }
  });
}

function searchPackageID(json) {
  let searchByID = document.querySelector(".byID");
  let searchByName = document.querySelector(".byPkgName");

  let members = json;
  console.log(members);
  searchByID.addEventListener("click", function () {
    let searchIndex;
    let searchInput = document.querySelector("#id").value;
    console.log(searchInput);

    for (let i = 0; i < members.length; i++) {
      if (searchInput == members[i].packageID) {
        searchIndex = i;
        console.log(members[i].packageName);
      }
    }

    if (searchIndex >= 0) {
      let i = searchIndex;
      document.querySelector("#packageName").value = members[i].packageName;
      document.querySelector("#packagePrice").value = members[i].packagePrice;
      document.querySelector("#packageCategory").value =
        members[i].packageCategory;
      document.querySelector("#packagePoint1").value = members[i].packagePoint1;
      document.querySelector("#packagePoint2").value = members[i].packagePoint2;
      document.querySelector("#packageStatus").value = members[i].packageStatus;
    } else {
      alert("id does not exist");
    }
  });
}

let insertPackageData = function (json) {
  let members = json;

  let col = [
    "packageID",
    "packageName",
    "packagePrice",
    "packageCategory",
    "packageStatus",
  ];

  // CREATE DYNAMIC TABLE.
  let table = document.createElement("table");

  // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

  let tr = table.insertRow(-1); // TABLE ROW.

  for (let i = 0; i < col.length; i++) {
    let th = document.createElement("th"); // TABLE HEADER.
    th.innerHTML = col[i];
    tr.appendChild(th);
  }

  for (let i = 0; i < members.length; i++) {
    tr = table.insertRow(-1);

    let tabCell = tr.insertCell(-1);
    tabCell.innerHTML = members[i].packageID;
    let tabCell1 = tr.insertCell(-1);
    tabCell1.innerHTML = members[i].packageName;
    let tabCell2 = tr.insertCell(-1);
    tabCell2.innerHTML = members[i].packagePrice;
    let tabCell3 = tr.insertCell(-1);
    tabCell3.innerHTML = members[i].packageCategory;
    let tabCell4 = tr.insertCell(-1);
    tabCell4.innerHTML = members[i].packageStatus;
  }

  // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
  let divContainer = document.querySelector(".pckgTable");
  divContainer.innerHTML = "";
  divContainer.appendChild(table);
};
