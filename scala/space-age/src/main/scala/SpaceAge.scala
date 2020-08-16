object SpaceAge{
  val EarthOrbitInSeconds = 31557600

  val onMercury: Double => Double = (age: Double) => toYears(age, 0.2408467)
  val onVenus: Double => Double = (age: Double) => toYears(age, 0.61519726)
  val onEarth: Double => Double = (age: Double) => toYears(age, 1.0)
  val onMars: Double => Double = (age: Double) => toYears(age, 1.8808158)
  val onJupiter: Double => Double = (age: Double) => toYears(age, 11.862615)
  val onSaturn: Double => Double = (age: Double) => toYears(age, 29.447498)
  val onUranus: Double => Double = (age: Double) => toYears(age, 84.016846)
  val onNeptune: Double => Double = (age: Double) => toYears(age, 164.79132)

  private def toYears(age: Double, orbitalPeriodInEarthYears: Double): Double = age / (EarthOrbitInSeconds * orbitalPeriodInEarthYears)
}