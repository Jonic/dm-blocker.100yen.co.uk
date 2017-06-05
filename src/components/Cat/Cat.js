import React from 'react';
import './Cat.css';

const maxImageNumber = 185

const catImageSrc = () => {
  let imageNum = getRandomInteger()
  return `${process.env.PUBLIC_URL}/images/${imageNum}.gif`
}

const getRandomInteger = () => {
  let min = 1
  let max = maxImageNumber
  return Math.floor(Math.random() * (max - min)) + min
}

const Cat = () =>
  <div className="Cat">
    <img className="Cat__image" src={catImageSrc()} alt=""/>
  </div>
    
export default Cat;
