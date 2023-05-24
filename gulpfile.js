const gulp = require("gulp")
const autoprefixer = require("gulp-autoprefixer")
const cleanCSS = require("gulp-clean-css")
const rename = require("gulp-rename")
const sass = require("sass")
const gulpSass = require("gulp-sass")(sass)
const webpack = require("webpack-stream")
const named = require("vinyl-named")

gulp.task("sass", function () {
  return gulp
    .src("assets/scss/*.scss", { ignore: ["assets/scss/_*.scss"] })
    .pipe(gulpSass())
    // .pipe(autoprefixer())
    // .pipe(cleanCSS())
    .pipe(
      rename(function (path) {
        path.basename += ".min"
      })
    )
    .pipe(gulp.dest("dist/css"))
})

gulp.task("js", () => {
  return gulp
    .src("assets/js/*.js")
    .pipe(named())
    .pipe(
      webpack({
        mode: "production",
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: ["@babel/preset-env"],
                },
              },
            },
          ],
        },
      })
    )
    .pipe(
      rename(function (path) {
        path.basename += ".min"
      })
    )
    .pipe(gulp.dest("dist/js"))
})

gulp.task("watch", function () {
  gulp.watch("assets/scss/**/*.scss", gulp.series("sass"))
  gulp.watch("assets/js/**/*.js", gulp.series("js"))
})

gulp.task("default", gulp.series("sass", "js", "watch"))
