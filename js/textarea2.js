let theEditor2;

ClassicEditor.create(document.querySelector("#subheadcontentDetails"), {
  ckfinder: {
    uploadUrl:
      "/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json",
  },
  mediaEmbed: {
    previewsInData: true,
  },
})
  .then((editor) => {
    theEditor2 = editor;
  })
  .catch((error) => {
    console.error(error);
  });

function getDataFromTheEditor2() {
  return theEditor2.getData();
}



setInterval(() => {
  var subheading = getDataFromTheEditor2();

  subheading = changeTagsInblog(subheading);

  document.getElementById("subheading").innerHTML = subheading;
  document.getElementById("subheadingdata").value = subheading.replace(/'/g , "/*-/");

  var theory = document.getElementById("my-theory");

}, 5000);

function showsub() {
  document.getElementById("submit").style.display = "block";
}

function changeTagsInblog(blog) {
  //cmimg

  blog = blog.replace(/&lt;cmimg/g, "<img");
  blog = blog.replace(/&nbsp;cmimg&gt;/g, ">");
  blog = blog.replace(/cmimg&gt;/g, ">");

  //cmiframe

  blog = blog.replace(/&lt;cmiframe/g, "<iframe");
  blog = blog.replace(/&nbsp;cmiframe&gt;/g, "></iframe>");
  blog = blog.replace(/cmiframe&gt;/g, "></iframe>");

  return blog;
}

window.onbeforeunload = function (e) {
    e = e || window.event;

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'Sure?';
    }

    // For Safari
    return 'Sure?';
};
